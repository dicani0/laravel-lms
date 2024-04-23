import {Pagination} from "@/types/index";

export type Course = {
    id: number;
    name: string;
    description: string;
    author_id: number;
    starts_at: string;
    ends_at: string;
    published_at: string;
    created_at: string;
}

export type CoursePagination = Pagination<Course>;